// levels.json is written as tools/fmt_levels.py writes it: indent 2, and arrays holding no
// arrays or objects on one line. Exporting what was imported gives the same bytes.
export function formatLevels(data) {
  const text = JSON.stringify(data, null, 2);
  return text.replace(/\[\s+([^\[\]\{]*?)\s+\]/g, (m, inner) => '[' + inner.replace(/\s+/g, ' ').trim() + ']') + '\n';
}
