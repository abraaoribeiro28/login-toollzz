@props(['tag' => false, 'title' => false])

<div class="slide">
    <div class="tag">
        <span>{{ $tag }}</span>
    </div>
    <div class="text">
        <h2 class="title">
            {{ $title }}
        </h2>
        <p class="description">
            Lorem ipsum nisl etiam himenaeos ligula augue vehicula gravida tincidunt,
            etiam magna sapien gravida sodales sed vel pulvinar suspendisse, morbi mi
            proin urna ornare posuere donec aptent. orci vivamus primis fusce lacinia
            libero nostra aliquam vestibulum
        </p>
    </div>
</div>
