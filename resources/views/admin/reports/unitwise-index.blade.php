<x-app-layout>

    @include('admin.reports.menu')
    <div class="container-fluid">
        <div class="row align-middle pt-3 mb-3">
            <div class="col-md-3">
                <h2 class="">
                    {{ __('Unit Wise Report') }}
                </h2>


                @if ($fromDate || $endDate)
                    <span class="muted">Showing results from</span>
                    <b>{{ $fromDate ? $fromDate->format('d/M/Y') : '' }}</b>
                    - <b>{{ $endDate ? $endDate->format('d/M/Y') : '' }}</b>
                @endif

            </div>
            <iframe id="print_frame" name="print_frame" width="0" height="0" frameborder="0"
                src="about:blank"></iframe>

            @if (count($jobpostings) < 1)

                <b>0 Records found for the selected dates</b>
            @else
                <div id="printable-table">
                    <table class="table table-hover table-responsive table-bordered">

                        @php $count = 0; @endphp

                        @foreach ($jobpostings as $j => $jobposting)
                            @if ($count < 1)
                                @php $keys = $jobposting; @endphp
                                <tr>
                                    <td rowspan="3" class="align-middle">#</td>
                                    @foreach ($keys as $key => $item)
                                        @if (is_object($item))
                                            <th colspan="{{ count($item) * 3 }}" class="text-center">{{ $key }}

                                            </th>
                                        @else
                                            <th rowspan="3" class="align-middle">{{ $key }}</th>
                                        @endif
                                    @endforeach
                                </tr>

                                <tr>

                                    @foreach ($keys as $key => $item)
                                        @if (is_object($item))
                                            @foreach ($item->toArray() as $k => $i)
                                                {{-- @foreach ($i as $k => $i) --}}
                                                <th colspan="3" class="text-center">{{ $k }}</th>
                                                {{-- @endforeach --}}
                                            @endforeach
                                        @endif
                                    @endforeach
                                </tr>

                                <tr>

                                    @foreach ($keys as $key => $item)
                                        @if (is_object($item))
                                            @foreach ($item->toArray() as $k => $i)
                                                @foreach ($i as $k => $i)
                                                    <th
                                                        class="bg-opacity-10 
                                    @switch($k)
                                    @case('TOTAL') bg-info
                                    @break
                                        @case('SL') bg-success
                                        @break
                                    @case('RJ') bg-danger
                                    @break
                                    @endswitch
                                     ">
                                                        {{ $k }}</th>
                                                @endforeach
                                            @endforeach
                                        @endif
                                    @endforeach
                                </tr>
                            @endif

                            @php $count++ @endphp

                            <tr>

                                <td> {{ $j + 1 }}</td>

                                @foreach ($jobposting as $key => $item)
                                    @if (is_object($item))
                                        @foreach ($item as $i)
                                            @foreach ($i as $k => $cat)
                                                <td
                                                    class="bg-opacity-10 
                                    @switch($k)
                                    @case('TOTAL') bg-info fw-bold
                                    @break
                                        @case('SL') bg-success
                                        @break
                                    @case('RJ') bg-danger
                                    @break
                                    @endswitch">
                                                    {{ $cat }} </td>
                                            @endforeach
                                        @endforeach
                                    @else
                                        <td> {{ $item }} </td>
                                    @endif
                                @endforeach
                            </tr>
                        @endforeach

                    </table>

                </div>
            @endif


        </div>


    </div>

</x-app-layout>
