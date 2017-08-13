# gasparEnriquez
Artist Website

#### SVG Decorators
svg elements are named:
  * symbol
  * motif-2
  * motif-3
  * motif-4
  * motif-5
  * motif-6
 
The __motif__ decorators have been added to the SVG library. To import the __motif__ SVG decorators use this syntax, changing the href to the motif you want
    <svg class="symbol symbol-XS"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#motif-2"></use></svg>
For consistancy the symbol and motif decorators should always contain the __class="symbol"__ to keep the opacity the same. 

__Sizing__ the decorators is done by adding another class after the "symbol" class, these can found at /scss/custom/hero.scss

+ __.symbol .symbol-XS = 100px__
+ __.symbol .symbol-S = 200px__
+ __.symbol .symbol-M = 300px__
+ __.symbol .symbol-L = 400px__
+ __.symbol .symbol-XL = 500px__



