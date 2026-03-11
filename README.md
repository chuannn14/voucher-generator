# Voucher Generator

This service generates 3,000,000 unique voucher codes and returns them as a CSV file.

## Requirements

- 10 character voucher codes
- Case sensitive
- Alphanumeric characters
- Generated within 2 minutes
- Dockerized service
- API endpoint: /generate

## Run

docker compose up --build

## Endpoint

http://localhost:3000/generate

This endpoint generates the CSV file and downloads it.