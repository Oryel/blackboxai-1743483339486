#!/bin/bash
echo "For production environments, please install Tailwind CSS properly:"
echo "1. Install Node.js on your system"
echo "2. Run: npm install -D tailwindcss postcss autoprefixer"
echo "3. Run: npx tailwindcss init"
echo "4. Build with: npx tailwindcss -i ./src/input.css -o ./dist/output.css --minify"
echo "5. Update header.php to use the local CSS file"