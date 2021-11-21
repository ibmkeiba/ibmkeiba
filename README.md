## Web Site

### AWS: ai-keiba-newhier
* root (https://ai-keiba-newhier.link/)
* example (https://ai-keiba-newhier.link/example)

### GitHub: theme original
* index (https://ibmkeiba.github.io/theme/)

### Local: MAMP
* example(http://localhost/keiba/GitHub/ibmkeiba/example/)

### Plugin Link
* Bootstrap5 (https://getbootstrap.jp/)
* Bootstrap4 (https://getbootstrap.com/docs/4.5/getting-started/introduction/)
* FullCalendar (https://fullcalendar.io/)
* Product Admin Template (https://templatemo.com/tm-524-product-admin)


### CDN from GitHub
* jsdeliver (https://www.jsdelivr.com/github)



## ibmkeiba ファイル構成

<pre>
root/
├── README.md
├── dbinfo.php
├── style/
│   ├── css/
│   │   ├── fontawesome.min.css
│   │   └── templatemo-style.css
│   └── js/
│       ├── Chart.min.js
│       ├── moment.min.js
│       └── tooplate-scripts.js
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
