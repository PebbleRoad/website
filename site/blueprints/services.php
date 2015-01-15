<?php if(!defined('KIRBY')) exit ?>

title: Service
files: true
pages: false
fields:
  title:
    label: Title
    type:  text
  summary:
    label: Summary
    type: textarea  
  services:
    label: Services
    type: structure
    entry: >
      {{name}}
    fields:
      name:
        label: Name
        type: text
      blurb:
        label: Short title
        type: text
      description:
        label: Short description
        type: textarea
      clients:
        label: Clients
        type: text
      case:
        label: Case study
        type: textarea
      body:
        label: Body
        type: textarea
