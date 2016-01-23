# colinjohnston.com devlog

**2015-09-20**

## Installed Jekyll

### Config

I want to serve `blog` from `http://colinjohnston.com/blog` and also be able to read styles from `http://colinjohnston.com/stylesheets`

1. `_config.yml` at root-level
2. source in `_jekyll`
3. destination in `blog`

Update `_config.yml` to include:

```
source: ./_jekyll
destination: ./blog
```

### Styles

Pulling in styles from `/stylesheets` using `JEKYLL_ENV`:

```ruby
{% if jekyll.environment == 'production' %}
  <link rel="stylesheet" href="{{ "/stylesheets/app.css" | prepend: site.url }}">
{% else %}
  <link rel="stylesheet" href="http://colinjohnston.local:8080/stylesheets/app.css">
{% endif %}
```

TODO: create local `devurl` variable.


