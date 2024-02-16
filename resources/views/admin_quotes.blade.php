<x-main_layout>
    <x-slot:title>
        Admin Quotes
    </x-slot:title>
    <form id="quoteForm" action="{{route('quote__store')}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="fancy-text-box-container">
            <label for="quote">
                Quote:
                <input id="quote" name="quote" type="text" placeholder="Enter new quote.." class="fancy-text-box"/>
            </label>
            <label for="author">
                Author: <input id="author" name="author" type="text" placeholder="Enter author .." class="fancy-text-box"/>
            </label>
            <div class="actions">
                <button type="submit" id="submitButton">Save</button>
            </div>
        </div>
        {{--@dd($quotes)--}}
    </form>
</x-main_layout>
