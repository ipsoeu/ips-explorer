#!/bin/bash

echo "Creating index pages:"

echo "Creating page ../index.html"
php index-page.php > ../index.html
echo "Done."

echo "Creating page ../case/index.html"
php case-index-page.php > ../case/index.html
echo "Done."

#echo "Creating page ../service/index.html"
#php service-index-page.php > ../service/index.html
#echo "Done."

#echo "Creating page ../project/index.html"
#php project-index-page.php > ../project/index.html
#echo "Done."

echo "Creating page ../catalog/index.html"
php catalog-index-page.php > ../catalog/index.html
echo "Done."

echo "Creating page ../chart/index.html"
php chart-index-page.php > ../chart/index.html
echo "Done."

