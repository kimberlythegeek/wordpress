# My Wordpress Stuff

> _I found myself spending a lot of time doing the same tasks, but customized to different websites. The plugins here are aimed at reducing the time spent on those tasks._

> _I have actively been trying to move away from using Child themes, and getting closer to custom theme development. Jumping straight into custom themes from child themes is a pretty big change, so I am using the Underscores starter theme as a transition to that, and used the "Sassify" option to include a basic Sass setup in the generated theme._

> _I found that a good deal of my time developing child themes was spent overwriting someone else's style rules, and throwing `!important` tags everywhere in places where the old rules took priority over mine. So the Underscores themes are aimed at reducing some of that irrelevant code._

> _Kimberly the Geek_

___

## Table of Contents

 - [Themes](#themes)
  - [A Code Above Theme](#a-code-above-theme)
  - [Hoffman Child Theme](#hoffman-child-theme)
  - [Olsen Light Child Theme](#olsen-light-child-theme)
  - [Ravel Child Theme](#ravel-child-theme)
  - [Twenty Eleven Child Theme](#twenty-eleven-child-theme)
  - [Twenty Sixteen Child Theme](#twenty-sixteen-child-theme)
 - [Plugins](#plugins)
  - [Add Footer Widget Area](#add-footer-widget-area)
  - [Contact Widget](#contact-widget)
  - [Hours Widget](#hours-widget)
  - [My Super Simple Contact Form](#my-super-simple-contact-form)
 - [Custom Post Types](#custom-post-types)
  - [Services CPT](#services-cpt)

___

# Themes

## A Code Above Theme
#### A Wordpress theme built with Underscores

I originally created a child theme for the Twenty Thirteen Wordpress theme, then recreated it using the Underscores starter theme. (http://underscores.me/)

All of the graphics are custom on this site. I am not a designer, but I do enjoy doing it sometimes.

___

## Hoffman Child Theme

The Natural Systems Institute re-design

Child theme used in http://acodeabove.com/nsi Original site: http://thenaturalsystemsinstitute.org

Very simple site, really the only customization was the logo re-design.

___

## Olsen Light Child Theme

Generic Hair Salon website

Child theme used in http://acodeabove.com/hairsalon (moving site, may not be active yet)

___

## Ravel Child Theme

Durango Tattoo Company

Child theme used in http://tattoodurango.com. My first Wordpress site.

No custom plugins or Sass used.

The original theme had only one widget area/sidebar, in `footer.php`, so that it moves underneath the main content area on smaller screens.

I added another widget area to mirror this sidebar on the left on larger screens, and above the main content on smaller screens. I used a CPT plugin to create a Testimonials post type, and used a widget for CPTs that randomly loads any posts of that type. 
___

## Twenty Eleven Child Theme

Pole Call Fitness re-design

Child theme used in http://acodeabove.com/polecallfitness Original site: http://polecallfitness.com

No custom plugins. I did add some simple features; when you click the address in the footer while using a mobile device, in iOS it will open Apple Maps, and in Android devices it will prompt for the user's choice in application. I also have two separate HTML 5 links for the phone number so that a user can either call or text.

___

## Twenty Sixteen Child Theme

Child theme used in http://durangoskeptics.com Original site: http://durangofreethinkers.com

No custom plugins. I used a CPT plugin to create post type Quotes, and a CPT widget that will always show the most recent quote. I used two Meetup.com widgets to show details of the next event and a list of the next five events.


___

# Plugins

## Add Footer Widget Area

So I created this as a plugin, but it doesn't work standalone, because in order to load the new widget area, the theme's files must be modified to load that widget area. 

It does, however, remove a step where you would normally have to modify functions.php or create custom-functions.php


___

## Contact Widget
###### _Work in Progress_

When written, will be a simple, lightweightou widget to display contact information. The location will open native map applications on mobile devices. (I have utilized this before, but not yet in a Wordpress plugin)


___

## Hours Widget
###### _Work in Progress_

When written, will be a simple plugin to display business hours, formatted to be responsive, to reduce the time spent doing redundant tasks from site to site.


___

## My Super Simple Contact Form
### An HTML 5 Contact Form

I like to utilize the new standards and features as much as I can. In HTML 5 several new input types were added, and I wasn't able to find any existing Wordpress plugins that utilize them.

Most of the other contact form plugins (that I tried) were also bloated, or packaged with other plugins, like in Jetpack. This one is currently hard-coded to my email address. This is a brand new plugin, and I haven't yet modified it for reusability.


___

# Custom Post Types

## Services CPT
###### _Work in Progress_

This will be a Custom Post Type to hold the name of a service offered, a description of that service, and the price of that service.
