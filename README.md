
# How to upload files on AWS S3
## Run Locally

Clone the project

```bash
  git clone https://github.com/adityafullstackdeveloper/s3upload.git
```

Go to the project directory

```bash
  cd s3upload
```

Install dependencies

```bash
  composer install
```

Copy .env.example to .env

```bash
  cp .env.example .env
```

Generate `APP_KEY` 

```bash
  php artisan key:generate
```

Start the server

```bash
  php artisan serve
```


## Environment Variables

To run this project, you will need to add the following environment variables to your .env file

`ANOTHER_API_KEY=`

`AWS_ACCESS_KEY_ID=`

`AWS_SECRET_ACCESS_KEY=`

`AWS_DEFAULT_REGION=us-east-1`

`AWS_BUCKET=`

`AWS_USE_PATH_STYLE_ENDPOINT=false`

