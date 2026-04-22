<x-app-layout>
    <x-slot name="header">
        About Us
    </x-slot>

    <div class="content has-text-centered mb-6">
        <h2 class="title is-3">Meet Our Team</h2>
        <p class="subtitle is-5">The talented individuals behind the Discovery Marketplace.</p>
    </div>

    <div class="columns is-multiline">
        <!-- Lead Developer -->
        <div class="column is-4">
            <div class="card">
                <div class="card-content">
                    <div class="media">
                        <div class="media-left">
                            <figure class="image is-48x48">
                                <img src="https://ui-avatars.com/api/?name=Alvin+Cuenca&background=00d1b2&color=fff" alt="Alvin Cuenca" class="is-rounded">
                            </figure>
                        </div>
                        <div class="media-content">
                            <p class="title is-4">Alvin Cuenca</p>
                            <p class="subtitle is-6">Lead Developer</p>
                        </div>
                    </div>
                    <div class="content">
                        Alvin is the primary architect of the system, handling the backend logic, authentication flows, and core marketplace functionality.
                    </div>
                </div>
            </div>
        </div>

        <!-- UI/UX Specialist -->
        <div class="column is-4">
            <div class="card">
                <div class="card-content">
                    <div class="media">
                        <div class="media-left">
                            <figure class="image is-48x48">
                                <img src="https://ui-avatars.com/api/?name=John+Kent+Beriton&background=3273dc&color=fff" alt="John Kent Beriton" class="is-rounded">
                            </figure>
                        </div>
                        <div class="media-content">
                            <p class="title is-4">John Kent Beriton</p>
                            <p class="subtitle is-6">UI/UX Specialist</p>
                        </div>
                    </div>
                    <div class="content">
                        John Kent is responsible for the visual identity and user interface, ensuring the Bulma integration is seamless and intuitive.
                    </div>
                </div>
            </div>
        </div>

        <!-- Database Administrator -->
        <div class="column is-4">
            <div class="card">
                <div class="card-content">
                    <div class="media">
                        <div class="media-left">
                            <figure class="image is-48x48">
                                <img src="https://ui-avatars.com/api/?name=Jomel+Gallo&background=48c774&color=fff" alt="Jomel Gallo" class="is-rounded">
                            </figure>
                        </div>
                        <div class="media-content">
                            <p class="title is-4">Jomel Gallo</p>
                            <p class="subtitle is-6">Database Administrator</p>
                        </div>
                    </div>
                    <div class="content">
                        Jomel manages the data structures and SQLite implementation, ensuring data integrity and efficient product querying.
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
