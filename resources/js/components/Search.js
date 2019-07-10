import React, {Component} from 'react';
import ReactDOM from 'react-dom';

export default class Search extends Component {
    state = {
        movies: [],
        movie: "",
    }

    componentDidMount() {
        let base_url = window.location.origin
        fetch('/get/movies')
            .then(response => response.json())
            .then(responseJSON => {
                this.setState({movies: responseJSON})
            })
    }

    onChangeFilter = (event) => {
        let res = this.state.movies.filter(function (movie) {
            return movie.title.toLowerCase().indexOf(event.target.value.toLowerCase()) !== -1
        })
        this.setState({filter: res})
    }

    show = () => {
        if (this.state.filter) {
            if (this.state.filter.length === 0) {
                return "Niks gevonden"
            }
            return this.state.filter.map((opt) => {
                return (
                    <div><a href={window.location.origin + "/movies/" + opt.id}>{opt.title}</a></div>
                )
            })
        }
    }

    render() {
        return (
            <div>
                <form className="form-inline my-2 my-lg-0">
                    <input onChange={(e) => this.onChangeFilter(e)} className="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"/>
                    <button className="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                <div>
                    {this.show()}
                </div>
            </div>
        );
    }
}

if (document.getElementById('search')) {
    ReactDOM.render(<Search/>, document.getElementById('search'));
}
