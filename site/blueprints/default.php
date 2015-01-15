<?php if(!defined('KIRBY')) exit ?>

title: Page
files: true
pages:
  num: date
  sort: flip
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