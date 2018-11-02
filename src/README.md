# USGS-Earthquakes-AngularJS

A simple Angular JS Project to retrieve and display earthquake geojson data

## How to run

### Python

Open the terminal and navigate to the folder where `index.html` is and run this command:

```shell
$ python -m SimpleHTTPServer 8000
```

> Note: `$` represents the terminal prompt. You shouldn't type it in your code. It is also possible you may need to run this on `python 2` or find a python 3 equivalent.

then you go to your web browser and type http://localhost:8000

### NodeJS

Create a simple javascript file called `server.js` in the same directory as `index.html`. Copy and paste this in

```javascript
var http = require('http');

http.createServer(function (request, response) {
    response.writeHead(200, {
        'Content-Type': 'text/plain',
        'Access-Control-Allow-Origin' : '*'
    });
    response.end('<a href="index.html">Go to index.html</a>');
}).listen(8000);
```

Save and open the terminal. Navigate to the index.html directory and run:

```shell
node server.js
```


### Others

#### IIS Manager on Windows

Search `IIS` in the windows search bar on Desktop to open the _Internet Information Services Manager_ application. Click on your `Domain name` at the top left of the application under `connections`. Click on the arrow button to open more options. Then select `sites`.

> If IIS doesn't pop up in the search result, search `program and features`, enable it and also enable IIS from the list of allowed program and features. 

Right click on `sites` and `add web site ...`

On the new dialog box that pops up, enter any name in the `site nam` box. On the physical path option, locate the `parent folder` where the file is stored i.e. the folder where `index.html` is inside. It will initially be the `earthquake` folder if you didn't rename it. Tick the `start website immediately` tick box if not already ticked.

> You should now be able to view the website on `http://localhost`. Don't forget to `stop` the server on IIS when you are finished. It's located on the `actions` box at the right hand side of the IIS Manager.


> You can aslso use other programming languages to run a simple server in the `index.html` location and it should work just fine.
