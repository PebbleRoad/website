<?php if(!defined('KIRBY')) exit ?>

title: Article
files: true
pages: false
fields:
  title:
    label: Title
    type:  text
  summary:
    label: Summary
    type: textarea
  body:
    label: Body
    type: textarea
    size: medium
  author:
    label: Author
    type: text
  date:
    label: Date
    type: date
  category:
    label: Category
    type: tags
