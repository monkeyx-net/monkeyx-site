// Jet Set Willy Construction Kit — room editor for levels.json.
// Edits the file as loaded and exports it as tools/fmt_levels.py writes it, so an
// unchanged import exports the same bytes. The ranges follow src/gamedata.c.

import { COLOURS, COLOUR_NAMES, TILE_TYPES, TYPE_BADGE, MOVES, DRAWS, MOVE_ARROW_LEFT, MOVE_ARROW_RIGHT,
         DRAW_ARROW, DRAW_TOILET, SPECIAL_ROOMS } from './palette.js';
import { formatLevels } from './format.js';

const ROOMS = 60, T_ITEM = 0, MAX_ITEMS = 12, MAX_SPRITES = 64;
const MOVE_LEFT = 0, MOVE_RIGHT = 1, MOVE_UP = 2, MOVE_DOWN = 3;

const $ = (id) => document.getElementById(id);

const state = {
  data: null,           // levels.json as loaded
  room: 0,
  tool: 'paint',
  paintSlot: 2,
  designSlot: 2,
  npc: -1,            // selected NPC slot
  zoom: 3,
  sprite: 'willy',      // 'willy' or a sprite index
  frame: 0,
  clipboard: null,
};

const room = () => state.data.rooms[state.room];
const npcs = () => state.data.npcs[state.room];
const isArrow = (r) => r.move === MOVE_ARROW_LEFT || r.move === MOVE_ARROW_RIGHT;
const clamp = (v, lo, hi) => Math.max(lo, Math.min(hi, v | 0));

// ── Drawing ──────────────────────────────────────────────────────────────────

function drawTile(ctx, gfx, paper, ink, x, y, ps) {
  for (let r = 0; r < 8; r++) {
    for (let c = 0; c < 8; c++) {
      ctx.fillStyle = COLOURS[(gfx[r] >> (7 - c)) & 1 ? ink : paper];
      ctx.fillRect(x + c * ps, y + r * ps, ps, ps);
    }
  }
}

// A 16×16 bitmap (rows of 16 bits, MSB leftmost): set pixels in ink, clear ones in paper
// unless paper is null.
function drawSprite(ctx, rows, ink, paper, x, y, ps) {
  for (let r = 0; r < 16; r++) {
    for (let c = 0; c < 16; c++) {
      const set = (rows[r] >> (15 - c)) & 1;
      if (!set && paper === null) continue;
      ctx.fillStyle = COLOURS[set ? ink : paper];
      ctx.fillRect(x + c * ps, y + r * ps, ps, ps);
    }
  }
}

// video_draw_arrow: an 8-pixel shaft with a pixel above and below at columns d and d + 6.
function drawArrow(ctx, x, y, dir, ps) {
  ctx.fillStyle = COLOURS[7];
  for (let c = 0; c < 8; c++) ctx.fillRect((x + c) * ps, (y + 1) * ps, ps, ps);
  for (const c of [dir, dir + 6]) {
    ctx.fillRect((x + c) * ps, y * ps, ps, ps);
    ctx.fillRect((x + c) * ps, (y + 2) * ps, ps, ps);
  }
}

const attrPaper = (attr) => (attr >> 4) & 15;
const attrInk = (attr) => attr & 15;

function renderRoom() {
  const canvas = $('room-canvas'), ctx = canvas.getContext('2d'), ps = state.zoom, rm = room();
  canvas.width = 256 * ps;
  canvas.height = 128 * ps;
  ctx.imageSmoothingEnabled = false;

  for (let cell = 0; cell < 512; cell++) {
    const slot = rm.data[cell], info = rm.info[slot];
    drawTile(ctx, rm.gfx[slot], attrPaper(info.attr), attrInk(info.attr), (cell & 31) * 8 * ps, (cell >> 5) * 8 * ps, ps);
  }
  // items show as slot 1, as the game sets them up, inks cycling 3 to 6 (level_init)
  rm.items.forEach((cell, k) => {
    drawTile(ctx, rm.gfx[1], attrPaper(rm.info[1].attr), (k & 3) + 3, (cell & 31) * 8 * ps, (cell >> 5) * 8 * ps, ps);
  });

  if ($('show-sprites').checked) {
    npcs().forEach((r, i) => {
      if (!r) return;
      if (r.draw === DRAW_ARROW) {
        if (r.x < 32) drawArrow(ctx, r.x * 8, r.y, r.speed, ps);
      } else {
        const frames = state.data.sprites[r.sprite];
        if (frames) drawSprite(ctx, frames[r.frame & r.mask], r.draw === DRAW_TOILET ? 7 : r.ink,
                               r.draw === DRAW_TOILET ? 0 : null, r.x * 8 * ps, r.y * ps, ps);
      }
      if ($('show-paths').checked) drawPath(ctx, r, ps);
      if (i === state.npc) {
        ctx.strokeStyle = '#58a6ff';
        ctx.lineWidth = 2;
        const w = r.draw === DRAW_ARROW ? 8 : 16, h = r.draw === DRAW_ARROW ? 3 : 16;
        ctx.strokeRect((Math.min(r.x, 31) * 8 - 1) * ps, (r.y - 1) * ps, (w + 2) * ps, (h + 2) * ps);
      }
    });
    if (rm.rope) drawRope(ctx, rm.rope, ps);
    const w = state.data.willy;
    if (w.room === state.room) drawSprite(ctx, state.data.willy_sprite[0], 8, null, w.x * 8 * ps, w.y * 8 * ps, ps);
  }

  if ($('show-grid').checked) {
    ctx.strokeStyle = 'rgba(255,255,255,0.08)';
    ctx.lineWidth = 1;
    for (let x = 0; x <= 32; x++) { ctx.beginPath(); ctx.moveTo(x * 8 * ps + 0.5, 0); ctx.lineTo(x * 8 * ps + 0.5, 128 * ps); ctx.stroke(); }
    for (let y = 0; y <= 16; y++) { ctx.beginPath(); ctx.moveTo(0, y * 8 * ps + 0.5); ctx.lineTo(256 * ps, y * 8 * ps + 0.5); ctx.stroke(); }
  }
}

// Where an NPC walks: its min and max, as [column, pixel row].
function drawPath(ctx, r, ps) {
  ctx.strokeStyle = 'rgba(255,200,0,0.7)';
  ctx.setLineDash([3, 3]);
  ctx.lineWidth = 1;
  ctx.beginPath();
  if (r.move === MOVE_LEFT || r.move === MOVE_RIGHT) {
    ctx.moveTo(r.min[0] * 8 * ps, (r.min[1] + 8) * ps);
    ctx.lineTo((r.max[0] * 8 + 16) * ps, (r.max[1] + 8) * ps);
  } else if (r.move === MOVE_UP || r.move === MOVE_DOWN) {
    ctx.moveTo((r.min[0] * 8 + 8) * ps, r.min[1] * ps);
    ctx.lineTo((r.max[0] * 8 + 8) * ps, (r.max[1] + 16) * ps);
  }
  ctx.stroke();
  ctx.setLineDash([]);
}

// The rope as it starts swinging (rope_init, do_rope_drawer): from the top of its column.
function drawRope(ctx, rope, ps) {
  const swing = state.data.rope_swing;
  let x = rope.x * 8, y = 0;
  ctx.fillStyle = COLOURS[rope.ink];
  ctx.fillRect(x * ps, y * ps, ps, ps);
  for (let seg = 1; seg < 33; seg++) {
    y += swing.y[34 + seg - 1];
    x += swing.x[34 + seg - 1];
    ctx.fillRect(x * ps, y * ps, ps, ps);
  }
}

function renderSlots() {
  const el = $('gfx-slots'), rm = room();
  el.innerHTML = '';
  for (let s = 0; s < 10; s++) {
    const div = document.createElement('div');
    div.className = 'gfx-slot' + (s === state.paintSlot ? ' paint-active' : '') + (s === state.designSlot ? ' design-active' : '');
    div.title = `Slot ${s}: ${TILE_TYPES[rm.info[s].type]}`;
    const c = document.createElement('canvas');
    c.width = c.height = 8;
    drawTile(c.getContext('2d'), rm.gfx[s], attrPaper(rm.info[s].attr), attrInk(rm.info[s].attr), 0, 0, 1);
    div.appendChild(c);
    const num = document.createElement('span');
    num.className = 'gfx-slot-num';
    num.textContent = s;
    div.appendChild(num);
    const badge = document.createElement('span');
    badge.className = 'gfx-slot-badge';
    badge.textContent = TYPE_BADGE[rm.info[s].type];
    div.appendChild(badge);
    div.addEventListener('click', () => { state.paintSlot = s; if (state.tool !== 'paint' && state.tool !== 'fill') setTool('paint'); renderSlots(); });
    div.addEventListener('contextmenu', (e) => { e.preventDefault(); state.designSlot = s; renderSlots(); renderTileDesigner(); });
    el.appendChild(div);
  }
}

function renderTileDesigner() {
  const rm = room(), s = state.designSlot, info = rm.info[s];
  $('designer-slot-num').textContent = s;
  $('tile-type').value = info.type;
  $('tile-paper').value = attrPaper(info.attr);
  $('tile-ink').value = attrInk(info.attr);
  $('tile-flash').checked = (info.attr & 0x100) !== 0;
  const c = $('tile-designer'), ctx = c.getContext('2d');
  drawTile(ctx, rm.gfx[s], attrPaper(info.attr), attrInk(info.attr), 0, 0, 16);
  ctx.strokeStyle = 'rgba(128,128,128,0.4)';
  for (let i = 1; i < 8; i++) {
    ctx.beginPath(); ctx.moveTo(i * 16 + 0.5, 0); ctx.lineTo(i * 16 + 0.5, 128); ctx.stroke();
    ctx.beginPath(); ctx.moveTo(0, i * 16 + 0.5); ctx.lineTo(128, i * 16 + 0.5); ctx.stroke();
  }
}

// ── Sprites ──────────────────────────────────────────────────────────────────

const spriteFrames = () => (state.sprite === 'willy' ? state.data.willy_sprite : state.data.sprites[state.sprite]);

function renderSpriteSelect() {
  const sel = $('sprite-sel'), uses = {};
  state.data.npcs.forEach((rs) => rs.forEach((r) => { if (r && r.sprite >= 0) uses[r.sprite] = (uses[r.sprite] || 0) + 1; }));
  sel.innerHTML = '<option value="willy">Willy (0-7) and the pig (8-15)</option>' +
    state.data.sprites.map((_, i) => `<option value="${i}">NPC sprite ${i} (${uses[i] || 0} NPCs)</option>`).join('');
  sel.value = String(state.sprite);
}

function renderSpriteDesigner() {
  const frames = spriteFrames(), n = frames.length;
  state.frame = Math.min(state.frame, n - 1);
  $('sprite-frame-sel').max = n - 1;
  $('sprite-frame-sel').value = state.frame;
  $('sprite-frame-num').textContent = state.frame;
  $('sprite-title').textContent = state.sprite === 'willy' ? 'Willy' : `NPC sprite ${state.sprite}`;
  const c = $('sprite-designer'), ctx = c.getContext('2d');
  ctx.fillStyle = '#000';
  ctx.fillRect(0, 0, 192, 192);
  drawSprite(ctx, frames[state.frame], 7, null, 0, 0, 12);
  ctx.strokeStyle = 'rgba(128,128,128,0.35)';
  for (let i = 1; i < 16; i++) {
    ctx.beginPath(); ctx.moveTo(i * 12 + 0.5, 0); ctx.lineTo(i * 12 + 0.5, 192); ctx.stroke();
    ctx.beginPath(); ctx.moveTo(0, i * 12 + 0.5); ctx.lineTo(192, i * 12 + 0.5); ctx.stroke();
  }
  const s = $('sprite-strip'), sctx = s.getContext('2d');
  sctx.fillStyle = '#000';
  sctx.fillRect(0, 0, 256, 16);
  frames.forEach((f, i) => drawSprite(sctx, f, i === state.frame ? 6 : 7, null, i * 16, 0, 1));
}

function editSpritePixel(e, set) {
  const c = $('sprite-designer'), rect = c.getBoundingClientRect();
  const col = Math.floor((e.clientX - rect.left) / rect.width * 16), row = Math.floor((e.clientY - rect.top) / rect.height * 16);
  if (col < 0 || col > 15 || row < 0 || row > 15) return;
  const f = spriteFrames()[state.frame], bit = 1 << (15 - col);
  f[row] = set ? f[row] | bit : f[row] & ~bit;
  renderSpriteDesigner();
  renderRoom();
}

// ── Properties ───────────────────────────────────────────────────────────────

function colourOptions(sel) {
  sel.innerHTML = COLOURS.map((c, i) => `<option value="${i}">${i} ${COLOUR_NAMES[i]}</option>`).join('');
}

function renderRoomMeta() {
  const rm = room();
  $('room-name').value = rm.name;
  $('room-border').value = rm.border;
  const names = state.data.rooms.map((r, i) => `<option value="${i}">${String(i).padStart(2, '0')} ${r.name.trim()}</option>`).join('');
  for (let d = 0; d < 4; d++) {
    $('exit-' + d).innerHTML = names;
    $('exit-' + d).value = rm.map[d];
  }
  const used = npcs().filter((r) => r).length;
  $('room-note').textContent = `Room ${state.room}` + (SPECIAL_ROOMS[state.room] ? ` — ${SPECIAL_ROOMS[state.room]}` : '') +
    ` · ${rm.items.length} of ${MAX_ITEMS} items · ${used} of 8 NPCs` + (rm.rope ? ' · rope' : '');
}

function renderRoomList() {
  $('room-list').innerHTML = state.data.rooms.map((r, i) =>
    `<div class="level-item${i === state.room ? ' active' : ''}" data-room="${i}"><span class="level-num">${i}</span><span class="level-name-text">${r.name.trim()}</span></div>`).join('');
  $('room-list').querySelectorAll('.level-item').forEach((el) => el.addEventListener('click', () => selectRoom(+el.dataset.room)));
}

function renderProps() {
  const r = state.npc >= 0 ? npcs()[state.npc] : null;
  $('npc-props').style.display = state.tool === 'npc' && r ? '' : 'none';
  $('rope-props').style.display = state.tool === 'rope' ? '' : 'none';
  $('start-props').style.display = state.tool === 'start' ? '' : 'none';
  $('tool-help').style.display = (state.tool === 'npc' && r) || state.tool === 'rope' || state.tool === 'start' ? 'none' : '';
  $('start-room').textContent = `room ${state.data.willy.room} (${state.data.rooms[state.data.willy.room].name.trim()})`;
  if (state.tool === 'rope') {
    $('rope-ink').value = room().rope ? room().rope.ink : 6;
    $('btn-del-rope').disabled = !room().rope;
  }
  if (!r) return;

  const walker = r.move === MOVE_LEFT || r.move === MOVE_RIGHT, climber = r.move === MOVE_UP || r.move === MOVE_DOWN;
  $('npc-slot').textContent = state.npc;
  $('npc-move').value = r.move;
  $('npc-draw').value = r.draw;
  $('npc-x').value = r.x;
  $('npc-x').max = isArrow(r) ? 255 : 30;
  $('npc-y').value = r.y;
  $('npc-range').style.display = walker || climber ? '' : 'none';
  $('npc-min').value = walker ? r.min[0] : r.min[1];
  $('npc-max').value = walker ? r.max[0] : r.max[1];
  $('npc-min').max = $('npc-max').max = walker ? 31 : 127;
  $('npc-speed').value = r.speed;
  $('npc-sprite').innerHTML = state.data.sprites.map((_, i) => `<option value="${i}">${i}</option>`).join('');
  $('npc-sprite').value = r.sprite;
  $('npc-ink').value = r.ink;
  $('npc-frame').value = r.frame;
  $('npc-mask').value = r.mask;
  $('npc-update').value = r.update;
  for (const id of ['npc-sprite', 'npc-ink', 'npc-frame', 'npc-mask', 'npc-update', 'npc-draw']) $(id).disabled = isArrow(r);
  $('npc-hint').textContent = isArrow(r)
    ? 'An arrow\'s X is its counter, 0–255: it flies across while under 32. Speed is its direction.'
    : walker ? 'Min and Max are columns. Speed is unused by walkers.'
    : climber ? 'Min and Max are pixel rows. Speed is pixels a step.' : '';
  const p = $('npc-preview'), pctx = p.getContext('2d');
  pctx.fillStyle = '#000';
  pctx.fillRect(0, 0, 64, 64);
  if (!isArrow(r) && state.data.sprites[r.sprite]) drawSprite(pctx, state.data.sprites[r.sprite][r.frame & r.mask], r.ink, null, 0, 0, 4);
}

// ── Editing ──────────────────────────────────────────────────────────────────

function note(text) {
  $('room-note').textContent = text;
}

function cellAt(e) {
  const c = $('room-canvas'), rect = c.getBoundingClientRect();
  const x = Math.floor((e.clientX - rect.left) / rect.width * 32), y = Math.floor((e.clientY - rect.top) / rect.height * 16);
  return x >= 0 && x < 32 && y >= 0 && y < 16 ? { x, y, cell: y * 32 + x } : null;
}

function paint(cell, slot) {
  if (room().info[slot].type === T_ITEM) {
    note(`Slot ${slot} is an item tile: use the Item tool, so the game counts it.`);
    return;
  }
  room().data[cell] = slot;
}

function fill(start, slot) {
  const data = room().data, from = data[start];
  if (from === slot || room().info[slot].type === T_ITEM) return paint(start, slot);
  const todo = [start];
  while (todo.length) {
    const c = todo.pop();
    if (data[c] !== from) continue;
    data[c] = slot;
    if ((c & 31) > 0) todo.push(c - 1);
    if ((c & 31) < 31) todo.push(c + 1);
    if (c >= 32) todo.push(c - 32);
    if (c < 480) todo.push(c + 32);
  }
}

function toggleItem(cell) {
  const items = room().items, i = items.indexOf(cell);
  if (i >= 0) {
    items.splice(i, 1);
  } else if (items.length >= MAX_ITEMS) {
    note(`A room holds at most ${MAX_ITEMS} items.`);
    return;
  } else {
    items.push(cell);
    items.sort((a, b) => a - b);
    room().data[cell] = 0;      // item cells hold 0; the game puts the item there
  }
}

function npcAt(px, py) {
  const rs = npcs();
  for (let i = rs.length - 1; i >= 0; i--) {
    const r = rs[i];
    if (!r) continue;
    const x = Math.min(r.x, 31) * 8, w = r.draw === DRAW_ARROW ? 8 : 16, h = r.draw === DRAW_ARROW ? 3 : 16;
    if (px >= x && px < x + w && py >= r.y && py < r.y + h) return i;
  }
  return -1;
}

function npcClick(e, at) {
  const rect = $('room-canvas').getBoundingClientRect();
  const px = (e.clientX - rect.left) / rect.width * 256, py = (e.clientY - rect.top) / rect.height * 128;
  const hit = npcAt(px, py);
  if (hit >= 0) {
    state.npc = hit;
    return;
  }
  const free = npcs().indexOf(null);
  if (free < 0) {
    note('A room holds at most 8 NPCs.');
    return;
  }
  const x = clamp(at.x, 0, 30), y = clamp(at.y * 8, 0, 112);
  npcs()[free] = { move: MOVE_LEFT, draw: 0, x, y, min: [Math.max(x - 4, 0), y], max: [Math.min(x + 4, 30), y],
                     speed: 0, sprite: 0, ink: 7, update: 0, frame: 0, mask: 7 };
  state.npc = free;
}

// Keeps an NPC's fields consistent with its move, as src/gamedata.c expects.
function setNpcMove(r, move) {
  const was = isArrow(r);
  r.move = move;
  if (isArrow(r)) {
    Object.assign(r, { draw: DRAW_ARROW, speed: move === MOVE_ARROW_LEFT ? 1 : 0, sprite: -1, ink: 0, update: 0, frame: 0, mask: 0 });
    r.min = [0, 0];
    r.max = [0, 0];
    return;
  }
  if (was) Object.assign(r, { draw: 0, speed: 0, sprite: 0, ink: 7, mask: 7, x: clamp(r.x, 0, 30) });
  if (move === MOVE_LEFT || move === MOVE_RIGHT) {
    r.min = [Math.max(r.x - 4, 0), r.y];
    r.max = [Math.min(r.x + 4, 30), r.y];
  } else if (move === MOVE_UP || move === MOVE_DOWN) {
    r.min = [r.x, Math.max(r.y - 32, 0)];
    r.max = [r.x, Math.min(r.y + 32, 112)];
    if (!r.speed) r.speed = 2;
  } else {
    r.min = [0, 0];
    r.max = [0, 0];
  }
}

function canvasAction(e, dragging) {
  const at = cellAt(e);
  if (!at) return;
  if (e.buttons === 2 || state.tool === 'erase') {
    room().data[at.cell] = 0;
  } else if (state.tool === 'paint') {
    paint(at.cell, state.paintSlot);
  } else if (dragging) {
    return;
  } else if (state.tool === 'fill') {
    fill(at.cell, state.paintSlot);
  } else if (state.tool === 'item') {
    toggleItem(at.cell);
  } else if (state.tool === 'npc') {
    npcClick(e, at);
  } else if (state.tool === 'rope') {
    room().rope = { x: clamp(at.x, 12, 19), ink: room().rope ? room().rope.ink : 6 };
  } else if (state.tool === 'start') {
    state.data.willy = { room: state.room, x: clamp(at.x, 0, 30), y: clamp(at.y, 0, 13) };
  }
  refresh(false);
}

function setTool(tool) {
  state.tool = tool;
  document.querySelectorAll('.tool-btn').forEach((b) => b.classList.toggle('active', b.dataset.tool === tool));
  renderProps();
}

function selectRoom(i) {
  state.room = i;
  state.npc = -1;
  refresh(true);
}

function refresh(all) {
  if (all) {
    renderRoomList();
    renderSlots();
    renderTileDesigner();
  }
  renderRoomMeta();
  renderRoom();
  renderProps();
}

// ── Import / export ──────────────────────────────────────────────────────────

function load(json) {
  if (!json || !Array.isArray(json.rooms) || json.rooms.length !== ROOMS || !Array.isArray(json.npcs) ||
      !Array.isArray(json.sprites) || !json.willy || !json.willy_sprite || !json.rope_swing) {
    alert('Not a Jet Set Willy levels.json: it needs rooms (60), npcs, sprites, willy, willy_sprite and rope_swing.');
    return;
  }
  state.data = json;
  state.room = Math.min(state.room, ROOMS - 1);
  state.npc = -1;
  state.sprite = 'willy';
  state.frame = 0;
  renderSpriteSelect();
  renderSpriteDesigner();
  refresh(true);
}

function exportJSON() {
  const a = document.createElement('a');
  a.href = URL.createObjectURL(new Blob([formatLevels(state.data)], { type: 'application/json' }));
  a.download = 'levels.json';
  document.body.appendChild(a);
  a.click();
  document.body.removeChild(a);
  URL.revokeObjectURL(a.href);
}

// ── Events ───────────────────────────────────────────────────────────────────

function setup() {
  for (const id of ['room-border', 'tile-paper', 'tile-ink', 'npc-ink', 'rope-ink']) colourOptions($(id));
  $('tile-type').innerHTML = TILE_TYPES.map((t, i) => `<option value="${i}">${t}</option>`).join('');
  $('npc-move').innerHTML = MOVES.map((t, i) => `<option value="${i}">${t}</option>`).join('');
  $('npc-draw').innerHTML = DRAWS.map((t, i) => `<option value="${i}"${i === DRAW_ARROW ? ' disabled' : ''}>${t}</option>`).join('');

  document.querySelectorAll('.tool-btn').forEach((b) => b.addEventListener('click', () => setTool(b.dataset.tool)));
  $('zoom-in').addEventListener('click', () => { state.zoom = Math.min(6, state.zoom + 1); $('zoom-label').textContent = state.zoom + '×'; renderRoom(); });
  $('zoom-out').addEventListener('click', () => { state.zoom = Math.max(1, state.zoom - 1); $('zoom-label').textContent = state.zoom + '×'; renderRoom(); });
  for (const id of ['show-grid', 'show-sprites', 'show-paths']) $(id).addEventListener('change', renderRoom);

  const canvas = $('room-canvas');
  canvas.addEventListener('contextmenu', (e) => e.preventDefault());
  canvas.addEventListener('mousedown', (e) => canvasAction(e, false));
  canvas.addEventListener('mousemove', (e) => { if (e.buttons) canvasAction(e, true); });

  $('room-name').addEventListener('input', (e) => { room().name = e.target.value.slice(0, 63); renderRoomList(); });
  $('room-name').addEventListener('change', () => { if (!room().name.trim()) room().name = 'Room ' + state.room; refresh(true); });
  $('room-border').addEventListener('change', (e) => { room().border = +e.target.value; });
  for (let d = 0; d < 4; d++) $('exit-' + d).addEventListener('change', (e) => { room().map[d] = +e.target.value; });

  // tile designer
  const setAttr = () => {
    const info = room().info[state.designSlot];
    info.attr = (+$('tile-paper').value << 4) | +$('tile-ink').value | ($('tile-flash').checked ? 0x100 : 0);
    renderSlots(); renderTileDesigner(); renderRoom();
  };
  for (const id of ['tile-paper', 'tile-ink', 'tile-flash']) $(id).addEventListener('change', setAttr);
  $('tile-type').addEventListener('change', (e) => { room().info[state.designSlot].type = +e.target.value; renderSlots(); });
  const tileEdit = (e) => {
    const c = $('tile-designer'), rect = c.getBoundingClientRect();
    const col = Math.floor((e.clientX - rect.left) / rect.width * 8), row = Math.floor((e.clientY - rect.top) / rect.height * 8);
    if (col < 0 || col > 7 || row < 0 || row > 7) return;
    const g = room().gfx[state.designSlot], bit = 0x80 >> col;
    g[row] = e.buttons === 2 ? g[row] & ~bit : g[row] | bit;
    renderTileDesigner(); renderSlots(); renderRoom();
  };
  $('tile-designer').addEventListener('contextmenu', (e) => e.preventDefault());
  $('tile-designer').addEventListener('mousedown', tileEdit);
  $('tile-designer').addEventListener('mousemove', (e) => { if (e.buttons) tileEdit(e); });

  // NPC properties
  const npc = () => npcs()[state.npc];
  $('npc-move').addEventListener('change', (e) => { setNpcMove(npc(), +e.target.value); refresh(false); });
  $('npc-draw').addEventListener('change', (e) => { npc().draw = +e.target.value; refresh(false); });
  $('npc-x').addEventListener('change', (e) => {
    const r = npc(), x = clamp(+e.target.value, 0, isArrow(r) ? 255 : 30);
    if (r.move === MOVE_UP || r.move === MOVE_DOWN) { r.min[0] = x; r.max[0] = x; }
    r.x = x; refresh(false);
  });
  $('npc-y').addEventListener('change', (e) => {
    const r = npc(), y = clamp(+e.target.value, 0, 112);
    if (r.move === MOVE_LEFT || r.move === MOVE_RIGHT) { r.min[1] = y; r.max[1] = y; }
    r.y = y; refresh(false);
  });
  for (const [id, key] of [['npc-min', 'min'], ['npc-max', 'max']]) {
    $(id).addEventListener('change', (e) => {
      const r = npc(), walker = r.move === MOVE_LEFT || r.move === MOVE_RIGHT;
      r[key][walker ? 0 : 1] = clamp(+e.target.value, 0, walker ? 31 : 127);
      refresh(false);
    });
  }
  for (const [id, key, hi] of [['npc-speed', 'speed', 16], ['npc-ink', 'ink', 15], ['npc-frame', 'frame', 7],
                               ['npc-mask', 'mask', 7], ['npc-update', 'update', 3], ['npc-sprite', 'sprite', MAX_SPRITES - 1]]) {
    $(id).addEventListener('change', (e) => { npc()[key] = clamp(+e.target.value, 0, hi); refresh(false); });
  }
  $('btn-del-npc').addEventListener('click', () => { npcs()[state.npc] = null; state.npc = -1; refresh(false); });

  // rope
  $('rope-ink').addEventListener('change', (e) => { if (room().rope) { room().rope.ink = +e.target.value; renderRoom(); } });
  $('btn-del-rope').addEventListener('click', () => { room().rope = null; refresh(false); });

  // sprites
  $('sprite-sel').addEventListener('change', (e) => { state.sprite = e.target.value === 'willy' ? 'willy' : +e.target.value; state.frame = 0; renderSpriteDesigner(); });
  $('sprite-frame-sel').addEventListener('change', (e) => { state.frame = clamp(+e.target.value, 0, spriteFrames().length - 1); renderSpriteDesigner(); });
  $('sprite-strip').addEventListener('click', (e) => {
    const rect = e.target.getBoundingClientRect(), i = Math.floor((e.clientX - rect.left) / rect.width * 16);
    if (i < spriteFrames().length) { state.frame = i; renderSpriteDesigner(); }
  });
  const sd = $('sprite-designer');
  sd.addEventListener('contextmenu', (e) => e.preventDefault());
  sd.addEventListener('mousedown', (e) => editSpritePixel(e, e.buttons !== 2));
  sd.addEventListener('mousemove', (e) => { if (e.buttons) editSpritePixel(e, e.buttons !== 2); });
  $('btn-sprite-new').addEventListener('click', () => {
    if (state.data.sprites.length >= MAX_SPRITES) return alert(`The game takes at most ${MAX_SPRITES} NPC sprites.`);
    state.data.sprites.push(Array.from({ length: 8 }, () => Array(16).fill(0)));
    state.sprite = state.data.sprites.length - 1;
    state.frame = 0;
    renderSpriteSelect(); renderSpriteDesigner(); renderProps();
  });
  const frameEdit = (fn) => { const f = spriteFrames()[state.frame]; f.splice(0, 16, ...fn(f)); renderSpriteDesigner(); renderRoom(); };
  $('btn-sprite-clear').addEventListener('click', () => frameEdit(() => Array(16).fill(0)));
  $('btn-sprite-copy').addEventListener('click', () => { state.clipboard = spriteFrames()[state.frame].slice(); });
  $('btn-sprite-paste').addEventListener('click', () => { if (state.clipboard) frameEdit(() => state.clipboard.slice()); });
  $('btn-sprite-flip-v').addEventListener('click', () => frameEdit((f) => f.slice().reverse()));
  $('btn-sprite-flip-h').addEventListener('click', () => frameEdit((f) => f.map((w) => {
    let o = 0;
    for (let b = 0; b < 16; b++) if (w & (1 << b)) o |= 1 << (15 - b);
    return o;
  })));

  // import / export
  $('btn-import').addEventListener('click', () => $('file-input').click());
  $('file-input').addEventListener('change', (e) => {
    const file = e.target.files[0];
    if (!file) return;
    const reader = new FileReader();
    reader.onload = (ev) => {
      try { load(JSON.parse(ev.target.result)); } catch (err) { alert('Invalid JSON: ' + err.message); }
    };
    reader.readAsText(file);
    e.target.value = '';
  });
  $('btn-export').addEventListener('click', exportJSON);

  const keys = { q: 'paint', w: 'erase', f: 'fill', i: 'item', r: 'npc', o: 'rope', s: 'start' };
  document.addEventListener('keydown', (e) => {
    if (e.target.tagName === 'INPUT' || e.target.tagName === 'SELECT' || !state.data) return;
    if (keys[e.key]) setTool(keys[e.key]);
    else if (e.key === '+' || e.key === '=') $('zoom-in').click();
    else if (e.key === '-') $('zoom-out').click();
  });
}

setup();
fetch('../levels.json')
  .then((r) => (r.ok ? r.json() : null))
  .then((json) => { if (json) load(json); else note('Import a levels.json to start.'); })
  .catch(() => note('Import a levels.json to start.'));
