<div>
	<h2>Revise</h2>

    <table class="table table-striped table-condensed table-hover">
        <thead>

            <tr>
                <th class="deletebtn" custom-sort order="'deletebtn'" sort="sort">Delete&nbsp;</th>
                <th class="id" custom-sort order="'id'" sort="sort">Id&nbsp;</th>
                <th class="name" custom-sort order="'name'" sort="sort">Name&nbsp;</th>
                <!--
                <th class="field3" custom-sort order="'field3'" sort="sort">Field 3&nbsp;</th>
                <th class="field4" custom-sort order="'field4'" sort="sort">Field 4&nbsp;</th>
                <th class="field5" custom-sort order="'field5'" sort="sort">Field 5&nbsp;</th>
                -->
            </tr>
        </thead>
        <tfoot>
            <td colspan="6">
                <div class="pagination pull-left">
                    <ul class="pagination">
                        <li ng-class="{disabled: currentPage == 0}">
                            <a href ng-click="prevPage()">« Prev</a>
                        </li>
                    
                        <li ng-repeat="n in range(pagedItems.length, currentPage, currentPage + gap) "
                            ng-class="{active: n == currentPage}"
                        ng-click="setPage()">
                            <a href ng-bind="n + 1">1</a>
                        </li>
                     
                        <li ng-class="{disabled: (currentPage) == pagedItems.length - 1}">
                            <a href ng-click="nextPage()">Next »</a>
                        </li>
                    </ul>
                </div>
            </td>
        </tfoot>
        <!--
        <pre>pagedItems.length: {{pagedItems.length|json}}</pre>
        <pre>currentPage: {{currentPage|json}}</pre>
        <pre>currentPage: {{sort|json}}</pre>
        -->
        <tbody>
            <tr ng-repeat="item in pagedItems[currentPage] | orderBy:sort.sortingOrder:sort.reverse">
                <td><input type="submit" value="Delete" ng-click="delete(item.id)"></td>
                <td>{{item.id}}</td>
                <td>{{item.name}}</td>
                <!--
                <td>{{item.field3}}</td>
                <td>{{item.field4}}</td>
                <td>{{item.field5}}</td>
                -->
            </tr>
        </tbody>
    </table>
    <a href="#!/menu">Back to menu</a>
</div>