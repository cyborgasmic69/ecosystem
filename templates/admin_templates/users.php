<!--
"Peace News Ecosystem" is a CMS developed to allow small groups with no tech' expertise to have an internet presence. Its USP is freedom from choice. You can see one installation of Peace News Ecosystem at https://zylum.org/
Copyright (C) 2014 Zylum Ltd.
admin@zylum.org / 5 Caledonian Rd, London, N1 9DY

Version one of Peace News Ecosystem was authored by http://www.wave.coop/ info@wave.coop

This program is free software: you can redistribute it and/or modify it under the terms of the GNU Affero General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more details.

You should have received a copy of the GNU Affero General Public License along with this program.  If not, see http://www.gnu.org/licenses/agpl-3.0.html
-->

<section id="admin-content">
    <div class="row">
        <div class="large-12 columns">
            <h2 class="bold">Manage groups</h2>
        </div>
    </div>

    <div class="row">
        <div class="large-12 columns">
            <ul>
                <li><a href="/manage/users/all">All users</a></li>
                <li><a href="/manage/users/owners">Site owners</a></li>
                <li><a href="/manage/users/suspended">Suspened/new users</a></li>
            </ul>

            <form action="/manage/users" method="post"><p>Search for user by email: <input name="usearch" type="text"> <input name="" type="submit" value="Search"></p></form>

            <table class="control" style="width:100%;">
                <tr>
                    <th>Name</th>
                    <th>email</th>
                    <th>Deputies</th>
                    <th>Reason for joining</th>
                    <th>Site title</th>
                    <th>Site url</th>
                    <th>User type</th>
                    <th>Suspend</th>
                    <th>Delete</th>
                </tr>
                <?php echo existing_users() ?>
            </table>
        </div>
    </div>
</section>
