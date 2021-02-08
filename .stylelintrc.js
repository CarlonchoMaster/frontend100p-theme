module.exports = {
  'extends': 'stylelint-config-standard',
  'rules': {
    'no-empty-source': null,
    'string-quotes': "double",
    'selector-list-comma-newline-after': "always-multi-line",
    "declaration-empty-line-before": null,
    "no-descending-specificity": null,
    'at-rule-no-unknown': [
      true,
      {
        'ignoreAtRules': [
          'extend',
          'at-root',
          'debug',
          'warn',
          'error',
          'if',
          'else',
          'for',
          'each',
          'while',
          'mixin',
          'include',
          'content',
          'return',
          'function',
          'tailwind',
          'apply',
          'responsive',
          'variants',
          'screen',
        ],
      },
    ],
    'function-name-case': ['lower', {
      'ignoreFunctions': ['mergeColorMaps', '/^bulma.*$/', '/^find.*$/']
    }],
    "at-rule-empty-line-before": ["always", {
      "ignore": ["after-comment", "inside-block", "blockless-after-same-name-blockless", "blockless-after-blockless"]
    }],
    "media-feature-name-no-unknown": [
      true,
      {
        "ignoreMediaFeatureNames": [
          "prefers-reduced-motion"
        ]
      }
    ]
  },
};
