# Greyb Patent Analytics API

This project provides a REST API built with CakePHP for analyzing patent data related to artificial intelligence. It uses PostgreSQL for data storage and Python for precomputing summary statistics.

## Tech Stack

- PHP 8.2 (with Apache)
- CakePHP 5.2
- Composer 2.x
- PostgreSQL 17
- Python 3.10+
- pandas, numpy (Python libraries)
- Docker & Docker Compose for containerization

## Prerequisites

- Docker 28.3+
- Docker Compose

## Getting Started

**Clone the repository**

   ```bash
   git clone git_repo_link
   cd greyb-assignment
   git checkout master
   ```

**Create the environment file**

    ```bash
    cp config/.env.example config/.env
    ```
**Copy the database credentials**

    Copy from config/app_local.example.php to config/app_local.php

**Build and run the container**

    docker compose up --build -d

**Run database migrations**  

    docker compose exec greyb_app bin/cake migrations migrate
