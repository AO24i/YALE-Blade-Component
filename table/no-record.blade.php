@props(['value' => 'No record found!', 'colspan' => 1])

<tr>
	<td colspan="{{ $colspan }}" {{ $attributes->merge(['class' => 'text-center text-danger py-4']) }}>{{ $value }}</td>
</tr>
