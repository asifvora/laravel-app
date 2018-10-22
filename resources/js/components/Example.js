import React, { Component } from 'react';
import ReactDOM from 'react-dom';

class Example extends Component {

    constructor(props) {
        super(props);
        this.state = {
            users: []
        }
    }

    componentDidMount() {
        fetch('/api/v1/users')
            .then(response => {
                return response.json();
            })
            .then(response => {
                let { payload: { users = [] } } = response;
                this.setState({ users: users });
            });
    }

    renderUsers() {
        let { users } = this.state;
        return users && users.length > 0 ? users.map(user => {
            return (
                <tr key={user.id}>
                    <td className="table-text">{user.id}</td>
                    <td className="table-text">{user.name}</td>
                    <td className="table-text">{user.email}</td>
                </tr>
            );
        }) : <tr><td colSpan={3}>No users found</td></tr>;
    }

    render() {
        return (
            <div className="py-4">
                <div className="container">
                    <div className="row justify-content-center">
                        <div className="col-md-8">
                            <center><h2>Laravel ReactJS App</h2></center>
                            <div className="card">
                                <div className="card-header">Users</div>
                                <div className="card-body">
                                    <div className="panel panel-default"></div>
                                    <div className="panel-body">
                                        <table className="table">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {this.renderUsers()}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}
if (document.getElementById('demo-app')) {
    ReactDOM.render(<Example />, document.getElementById('demo-app'));
}
