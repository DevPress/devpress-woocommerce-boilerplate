#!/bin/bash
# Run `chmod +x start.sh` to make it executable.

bold=$(tput bold)
normal=$(tput sgr0)

echo ""
echo "Hello! Let's get started with your WooCommerce plugin."
echo ""
echo "${bold}What is the slug for your plugin?${normal} (e.g. devpress-example-plugin)"
read -p 'Slug: ' slug
echo ""
echo "${bold}What is the name of your plugin?${normal} (e.g. DevPress Example Plugin)"
read -p 'Name: ' name
echo ""

echo "Setting up $name with slug $slug..."
