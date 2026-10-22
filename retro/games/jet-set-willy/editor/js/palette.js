// The game's 16 colours (videoColour in src/misc.c).
export const COLOURS = [
  '#000000', '#0000ff', '#ff0000', '#ff00ff', '#00ff00', '#00aaff', '#ffff00', '#ffffff',
  '#cccccc', '#0055ff', '#aa0000', '#550000', '#00aa00', '#005500', '#ff8000', '#804000',
];

export const COLOUR_NAMES = [
  'Black', 'Blue', 'Red', 'Magenta', 'Green', 'Light blue', 'Yellow', 'White',
  'Mid grey', 'Mid blue', 'Mid red', 'Dark red', 'Mid green', 'Dark green', 'Orange', 'Brown',
];

// Tile types, in the order of the T_* enum in src/game.h.
export const TILE_TYPES = [
  'Item', 'Space', 'Solid', 'Floor', 'Solid floor', 'Conveyor ←', 'Conveyor →',
  'Ramp ↖', 'Ramp ↗', 'Ramp ↖ (conveyor)', 'Ramp ↗ (conveyor)', 'Harm',
];

export const TYPE_BADGE = ['ITEM', '', 'SOLID', 'FLOOR', 'SFLR', '←', '→', '↖', '↗', '↖c', '↗c', 'HARM'];

// NPC moves and draws: MOVE_* and DRAW_* in src/game.h.
export const MOVES = ['← Left', '→ Right', '↑ Up', '↓ Down', 'Arrow ←', 'Arrow →', 'Static', 'Maria'];
export const MOVE_ARROW_LEFT = 4;
export const MOVE_ARROW_RIGHT = 5;
export const DRAWS = ['NPC', 'Arrow', 'Toilet'];
export const DRAW_ARROW = 1;
export const DRAW_TOILET = 2;

// Rooms the game code finds by number (src/game.h).
export const SPECIAL_ROOMS = {
  4: 'The Drive', 28: 'First Landing', 29: 'Nightmare Room (Willy is the pig)',
  31: 'Swimming Pool (Willy is blue under water)', 33: 'The Bathroom (start, toilet)', 35: 'Master Bedroom (Maria)',
};
