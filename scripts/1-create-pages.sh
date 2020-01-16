#!/bin/bash

bash create-index-pages.sh
php  create-service-pages.php
php  create-catalog-pages.php
php  create-chart-pages.php

