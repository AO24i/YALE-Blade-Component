@props([
    'id' => null,
    'name' => null,
    'title' => true,
    'value' => '',
    'disable' => false,
    'obind' => true,
    'ochange' => false,
    'validateJS' => true,
    'btnID' => 'sendBtn',
    'css' => '',

    'placeholder' => null,
    'ocomplete' => true,

    'step' => '0.10',
    'min' => '0.00',
    'max' => '1000.00',
])
<x-veo.form.input.field.number :id="$id" :name="$name" :title="$title" :placeholder="$placeholder" :disable=$disable :obind=$obind :ochange=$ochange :validateJS=$validateJS :btnID=$btnID :value=$value :ocomplete=$ocomplete :step="$step" :min="$min" :max="$max" {{ $attributes }} />

{{-- {{ $attributes->except(['title', 'description']) }} --}}