# Grabbing GitHub Repo Download Info via the GitHub API

**Intended audience:** IGDA's GGJ organizers.

Uses the [falconhoof/Game-Jam-2012-Client](https://github.com/falconhoof/Game-Jam-2012-Client) repository as an example.

See [example.php](https://github.com/leereilly/github-api-igda-php/blob/master/example.php) for the actual code.

![](https://img.skitch.com/20120718-mj4mc6jtu5j7xd9styu79w9i33.png)

* API call to:
`https://api.github.com/repos/falconhoof/Game-Jam-2012-Client/downloads`

* Gives you the following

```javascript
[
  {
    "description": "Some other big file",
    "download_count": 3,
    "created_at": "2012-06-06T18:43:58Z",
    "content_type": "application/zip",
    "size": 65409024,
    "html_url": "https://github.com/downloads/falconhoof/Game-Jam-2012-Client/some-other.zip",
    "name": "some-other.zip",
    "id": 251317,
    "url": "https://api.github.com/repos/falconhoof/Game-Jam-2012-Client/downloads/251317"
  },
  {
    "description": "Game assets, source, press info and playable version",
    "download_count": 3,
    "created_at": "2012-06-06T18:40:18Z",
    "content_type": "application/zip",
    "size": 65409024,
    "html_url": "https://github.com/downloads/falconhoof/Game-Jam-2012-Client/PastLifeGame.zip",
    "name": "PastLifeGame.zip",
    "id": 251316,
    "url": "https://api.github.com/repos/falconhoof/Game-Jam-2012-Client/downloads/251316"
  }
]
```