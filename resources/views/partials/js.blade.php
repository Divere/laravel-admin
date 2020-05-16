@foreach($js as $j)
<script nonce="{{ csp_nonce() }}" src="{{ admin_asset ("$j") }}"></script>
@endforeach
