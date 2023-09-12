@if($type == "success")
<div class="alert alert-{{$type}} max-w-screen-xl p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400">
    {{$slot}}
</div>
@elseif ($type == "danger")
<div class="alert alert-{{$type}} max-w-screen-xl m-auto  p-4 mb-8 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">
    {{$slot}}
</div>
@endif
