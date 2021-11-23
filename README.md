## Web Site

### AWS: ai-keiba-newhier
* root (https://ai-keiba-newhier.link/)
* example (https://ai-keiba-newhier.link/example)

### GitHub: theme original
* index (https://ibmkeiba.github.io/theme/)

### Local: MAMP
* example index (http://localhost/keiba/GitHub/ibmkeiba/example/)
* example original (http://localhost/keiba/GitHub/ibmkeiba/example/original.html)
* example combine (http://localhost/keiba/GitHub/ibmkeiba/example/combine.html)
combine.html

### Plugin Link
* Bootstrap5 (https://getbootstrap.jp/)
* Bootstrap4 (https://getbootstrap.com/docs/4.5/getting-started/introduction/)
* FullCalendar (https://fullcalendar.io/)
* Product Admin Template (https://templatemo.com/tm-524-product-admin)
* Font Awesome (https://fontawesome.com)
* Chart.js (https://www.chartjs.org/)



### CDN from GitHub
* jsdeliver (https://www.jsdelivr.com/github)

|  Type  |  Name  |  URL  |
| ---- | ---- | ---- |
|  CSS  |  fontawesome.min.css  |  https://cdn.jsdelivr.net/gh/ibmkeiba/ibmkeiba@main/style/css/fontawesome.min.css  |
|  CSS  |  templatemo-style.css  |  https://cdn.jsdelivr.net/gh/ibmkeiba/ibmkeiba@main/style/css/templatemo-style.css  |
|  JS  |  Chart.min.js  |  https://cdn.jsdelivr.net/gh/ibmkeiba/ibmkeiba@main/style/js/Chart.min.js  |
|  JS  |  moment.min.js  |  https://cdn.jsdelivr.net/gh/ibmkeiba/ibmkeiba@main/style/js/moment.min.js  |
|  JS  |  tooplate-scripts.js  |  https://cdn.jsdelivr.net/gh/ibmkeiba/ibmkeiba@main/style/js/tooplate-scripts.js  |


### CDN from Official

* jsdeliver (https://www.jsdelivr.com/)
* Bootstrap v4.5 (https://getbootstrap.com/docs/4.5/getting-started/introduction/)

|  Type  |  Name  |  CODE  |
| ---- | ---- | ---- |
|  CSS  |  bootstrap.min.css  |  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">  |
|  JS  |  jquery-3.5.1.slim.min.js  |  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>  |
|  JS  |  bootstrap.bundle.min.js  |  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>  |


## ibmkeiba ファイル構成

<pre>
root/
├── README.md
├── dbinfo.php
├── styles/
│   ├── css/
│   │   ├── bootstrap.min.css
│   │   ├── fontawesome.min.css
│   │   └── templatemo-style.css
│   ├── js/
│   │   ├── Chart.min.js
│   │   ├── bootstrap.min.js
│   │   ├── jquery-3.3.1.min.js
│   │   ├── moment.min.js
│   │   └── tooplate-scripts.js
│   └── webfonts/
├── example/
│   ├── index.html
│   ├── original.html
│   ├── empty.html
│   ├── combine.html
│   ├── data/
│   │   ├── index.html
│   │   ├── calendar/
│   │   │   └── index.html
│   │   ├── date/
│   │   ├── race/
│   │   ├── card/
│   │   └── recommend/
│   └── contents/
│       ├── calendar/
│       │   ├── index.html
│       │   └── parts
│       │       └── dev1.html
│       ├── date/
│       ├── race/
│       ├── card/
│       └── recommend/
├── main/
└── memo/
</pre>


## Apache Server 実際の配置

<pre>
var/
└── www/
    ├── .dbinfo.php
    ├── .venv
    └── html/
        ├── index.html
        ├── data
        │   └── index.html
        └── contents
            ├── calendar/
            │   └── parts.html
            ├── date/
            │   └── parts.html
            ├── race/
            │   └── parts.html
            ├── card/
            │   └── parts.html
            └── recommend/
                └── parts.html
</pre>

<!--
**ibmkeiba/ibmkeiba** is a ✨ _special_ ✨ repository because its `README.md` (this file) appears on your GitHub profile.

Here are some ideas to get you started:

- 🔭 I’m currently working on ...
- 🌱 I’m currently learning ...
- 👯 I’m looking to collaborate on ...
- 🤔 I’m looking for help with ...
- 💬 Ask me about ...
- 📫 How to reach me: ...
- 😄 Pronouns: ...
- ⚡ Fun fact: ...
-->
