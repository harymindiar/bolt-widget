Bolt Widget Extension 
=====================

Widget extension will render your widget through Twig function

how to use
 1. create widget class. please see `Extension.php` and `src/SampleWidget` for your reference
 2. add your widget class on widget.provider
 3. then call it `{{ render_widget('your_widget_name', 'param1', 'param2') }}` in your template
