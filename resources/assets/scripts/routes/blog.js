import hljs from 'highlight.js/lib/core';
import javascript from 'highlight.js/lib/languages/javascript';
import php from 'highlight.js/lib/languages/php';
import css from 'highlight.js/lib/languages/css';
import htmlbars from 'highlight.js/lib/languages/htmlbars';
import phpTemplate from 'highlight.js/lib/languages/php-template';
import typescript from 'highlight.js/lib/languages/typescript';
import xml from 'highlight.js/lib/languages/xml';

export default {
  init() {
    hljs.registerLanguage('javascript', javascript);
    hljs.registerLanguage('php', php);
    hljs.registerLanguage('css', css);
    hljs.registerLanguage('htmlbars', htmlbars);
    hljs.registerLanguage('php-template', phpTemplate);
    hljs.registerLanguage('typescript', typescript);
    hljs.registerLanguage('xml', xml);

    hljs.highlightAll();
  },
}

