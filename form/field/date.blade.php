@props([
    'id' => 'date',
    'name' => 'date',
    'title' => true,
    'value' => false,
    'disable' => false,
    'obind' => true,
    'ochange' => false,
    'validateJS' => true,
    'btnID' => 'sendBtn',
    'css' => '',

    'placeholder' => null,
    'ocomplete' => true,
])
<x-veo.form.input.field.text :id="$id" :name="$name" :title="$title" :placeholder="$placeholder" :disable=$disable :obind=$obind :ochange=$ochange :validateJS=$validateJS :btnID=$btnID :value=$value :ocomplete=$ocomplete type="date" {{ $attributes }} />
