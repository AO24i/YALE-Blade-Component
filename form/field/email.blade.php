@props([
    'id' => 'email',
    'name' => 'email',
    'title' => 'email address',
    'value' => '',
    'disable' => false,
    'obind' => true,
    'ochange' => false,
    'validateJS' => true,
    'btnID' => 'sendBtn',
    'css' => '',

    'placeholder' => 'email address',
    'ocomplete' => true,
])

<x-yale.form.field.text :id="$id" :name="$name" :title="$title" :placeholder="$placeholder" :disable=$disable :obind=$obind :ochange=$ochange :validateJS=$validateJS :btnID=$btnID :value=$value :ocomplete=$ocomplete type="email" {{ $attributes }} />
