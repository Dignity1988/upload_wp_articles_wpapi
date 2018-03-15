var {
  extract
} = require('article-parser');

let url = 'http://whiteraven.org.ua/page.php?30';

extract(url).then((article) => {
  console.log(article);
}).catch((err) => {
  console.log(err);
});
