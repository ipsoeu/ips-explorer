#!/bin/bash

bash create-index-pages.sh
php  create-case-pages.php
#php  create-service-pages.php
#php  create-project-pages.php
php  create-catalog-pages.php
php  create-chart-pages.php

