<div class="cms-columns row">
@foreach($data['contents'] ?? [] as $content)
    <div class="col">
    @foreach((array) $content as $item)
        @includeFirst([$item['type'] ?? '', 'cms::invalid'], $item)
    @endforeach
    </div>
@endforeach
</div>
