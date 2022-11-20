@extends('master')
@section('title', 'Tabulka')

@section('content')

    <div class="row row-margin-top">
        <div class="col-md-4 offset-md-4">
            <h1 class="h1-style">Tabulka po 8. kole</h1>
            <p class="para-style">
                Prehladna tabulka timov.
            </p>
        </div>
    </div>

    <div class="row row-margin-top">
        <div class="col-md-4 offset-md-4 col-style">

            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tim:</th>
                        <th scope="col">OZ:</th>
                        <th scope="col">Skore:</th>
                        <th scope="col">Body:</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>FC Barcelona</td>
                        <td>8</td>
                        <td>25:5</td>
                        <td>21</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Real Madrid</td>
                        <td>7</td>
                        <td>19:10</td>
                        <td>18</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Athletico Madrid</td>
                        <td>8</td>
                        <td>12:12</td>
                        <td>16</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Athletico Madrid</td>
                        <td>8</td>
                        <td>12:12</td>
                        <td>15</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Osasuna</td>
                        <td>8</td>
                        <td>15:20</td>
                        <td>13</td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>Celta Vigo</td>
                        <td>8</td>
                        <td>14:12</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td>Valencia</td>
                        <td>8</td>
                        <td>8:10</td>
                        <td>8</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    </div>

@endsection
