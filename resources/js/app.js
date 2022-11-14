import './bootstrap';
import {instantMeiliSearch} from '@meilisearch/instant-meilisearch'
import instantsearch from "instantsearch.js";

import {searchBox, hits} from 'instantsearch.js/es/widgets';

const searchGroup = document.querySelector('#search-group')
searchGroup.querySelector('form').remove()
searchGroup.insertAdjacentHTML("beforeend", `
            <div>
                <div id="searchbox" class="border border-x-blue-900 rounded-md p-2"></div>
                <div id="hits"></div>
            </div>`)


const search = instantsearch({
    indexName: 'posts',
    searchClient: instantMeiliSearch(
        'http://127.0.0.1:7700',
        '',
        {
            placeholderSearch: false,
        }
    ),
})

search.addWidgets([
    searchBox({
        container: '#searchbox',
        placeholder: 'Search for posts',
    }),
    hits({
        container: '#hits',
        templates: {
            item(hit,
                 {
                     html, components,
                 }
            ) {
                return html`
                    <div>
                        <div class="hit-name">
                            <a href="/posts/${hit.slug}">
                                ${components.Highlight({hit, attribute: 'title'})}
                            </a>
                        </div>
                    </div>`
            },
            empty(results, { html }) {
                return html``;
            },
        },
    }),
])

search.start()
