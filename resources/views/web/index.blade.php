<x-guest-layout>
    <section>
        @include('web.partials.section1')

        @include('web.partials.section1-responsive')
    </section>

    <section class="py-24 container mx-auto">
        @include('web.partials.section2')
    </section>

    <section>
         @include('web.partials.section3')
    </section>

    <section>
        @include('web.partials.section4')
   </section>
</x-guest-layout>
