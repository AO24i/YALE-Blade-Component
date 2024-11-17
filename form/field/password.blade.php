@props([
    'id' => 'password',
    'name' => null,
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

    'focus' => false,
    'blur' => false,
    'onfocusblur' => true,
])

<x-bluc.form.field.text :id="$id" :name="$name" :title="$title" :placeholder="$placeholder" :disable=$disable :obind=$obind :ochange=$ochange :validateJS=$validateJS :btnID=$btnID :value=$value :ocomplete=$ocomplete :focus=$focus :blur=$blur :onfocusblur=$onfocusblur type="password" {{ $attributes }} />
