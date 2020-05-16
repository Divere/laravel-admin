<script nonce="{{ csp_nonce() }}" data-exec-on-popstate>

    $(function () {
        @foreach($script as $s)
            {!! $s !!}
        @endforeach
    });
</script>
