ffmpeg -i input.webm -c:v libwebp_anim -vf scale=400:200 -quality 75 -loop 0 dungeon-deep.webp
