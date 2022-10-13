@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://user-images.githubusercontent.com/78981558/195495941-1d475be4-4685-40ff-8f45-73826c94a391.png" class="logo" alt="VeloApp Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
 