#!/bin/bash
# This script updates the plugin name, slug and file names.
# Run `chmod +x bin/start.sh` to make it executable.
# Then run `./bin/start.sh` to start the process.

bold=$(tput bold)
normal=$(tput sgr0)

initial_slug="devpress-woocommerce-boilerplate"
initial_name="DevPress WooCommerce Boilerplate"
inital_class="DevPress_WooCommerce_Boilerplate"

echo ""
echo "Hello! Let's get started with your WooCommerce plugin."
echo ""
echo "${bold}What is the slug for your plugin?${normal} (e.g. ${initial_slug})"
read -p 'Slug: ' slug
echo ""
echo "${bold}What is the name of your plugin?${normal} (e.g. ${initial_name})"
read -p 'Name: ' name
echo ""
echo "${bold}What is the main class name of your plugin?${normal} (e.g. ${inital_class})"
read -p 'Class: ' name
echo ""

echo "Setting up ${bold}${name}${normal} (${slug})..."
echo ""

sed -i '' "s/$initial_slug/$slug/" *.txt *.md *.php *.json *.xml
sed -i '' "s/$initial_name/$name/" *.txt *.md *.php *.json *.xml
sed -i '' "s/$initial_class/$class/" *.php
mv "$initial_slug.php" "$slug.php"
