#!/bin/bash
# Run `chmod +x start.sh` to make it executable.

bold=$(tput bold)
normal=$(tput sgr0)

initial_slug="devpress-woocommerce-boilerplate"
initial_name="DevPress WooCommerce Boilerplate"

echo ""
echo "Hello! Let's get started with your WooCommerce plugin."
echo ""
echo "${bold}What is the slug for your plugin?${normal} (e.g. ${initial_slug})"
read -p 'Slug: ' slug
echo ""
echo "${bold}What is the name of your plugin?${normal} (e.g. ${initial_name})"
read -p 'Name: ' name
echo ""

echo "Setting up ${bold}${name}${normal} (${slug})..."
echo ""

sed -i '' "s/$initial_slug/$slug/" *.txt
sed -i '' "s/$initial_name/$name/" *.txt
