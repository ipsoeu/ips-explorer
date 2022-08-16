#!/bin/bash

echo "Preparing data:"

echo "Normalising case records..."
php normalise-cases.php
echo "Done."

# echo "Normalising service records..."
# php normalise-services.php
# echo "Done."

# echo "Normalising project records..."
# php normalise-projects.php
# echo "Done."

echo "Normalising catalog records..."
php normalise-catalogs.php
echo "Done."

echo "Merge case records..."
php merge-cases.php
echo "Done."

# echo "Merge service records..."
# php merge-services.php
# echo "Done."

# echo "Merge project records..."
# php merge-projects.php
# echo "Done."

echo "Merge catalog records..."
php merge-catalogs.php
echo "Done."

# Temporary copy - to be removed.
cp -p ../data/cases.json ../data/services.json

echo "Create CSV files..."
php json2csv.php
echo "Done."
