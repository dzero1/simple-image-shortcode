# Image short code tag for Wordpress sites

## Usage
```
[img src="/path/to/your/image.file"]
```

***src*** or ***href*** attribute must be provided.
<br>
***href*** attribute is optional. If href not provided, image will render without an anchor tag
<br>
*if href is provided and src not provided, the src will be equal to href*
```
[img href="/path/to/your/image.file"]
```

You can use one or more other attributes as required.

```
[img src="/path/to/your/image.file" alt="Alt text" width="{xxx}px;" height="{yyy}px" class="your image classes" href="link to open when click the image" target="_self or _parent or other target"]
```