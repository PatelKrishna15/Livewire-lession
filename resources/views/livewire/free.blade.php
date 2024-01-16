<div>
    <input  type="text"    wire:model="cname">
    <input type="checkbox"wire:model="loud" >
    hello {{ strtoupper($cname) }}@if ($loud) !


    @endif
    <button wire:mouseEnter="resetName('Bingo')">Reset</button>
</div>
