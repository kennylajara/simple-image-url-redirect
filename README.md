# Simple Image for URL Redirect

#### _A simple Docker image to create URL redirections._

## Features

- You can set a custom destination URL.
- Option for 301 and 302 redirects.
- Easy to use.

## Usage

Create a `docker-compose.yaml` file with the following content and execute `docker-compose up -d`:

```
version: '3.1'

services:
  app:
    image: kennylajara/simple-image-url-redirect:latest
    environment:
      - URL=http://example.com/ # Set destination URL
      - PERMANENT=False # Change to True for 301 redirect
    ports:
      - 80:80
      - 443:443
```

Don't forget to change the URL parameter.

&bull; &nbsp; &bull; &nbsp; &bull;

Or you can clone the repo and rebuild the image from the compose file, although I think the copy/paste is easier to do.

## License

MIT
