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
                    <td>{user.id}</td>
                    <td>{user.name}</td>
                    <td>{user.email}</td>
                </tr>
            );
        }) : <tr><td colSpan={3}>No users found</td></tr>;
    }

    render() {
        return (
            <div>
                <br />
                <center><h2>Laravel ReactJS App</h2></center>
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
        );
    }
}
if (document.getElementById('demo-app')) {
    ReactDOM.render(<Example />, document.getElementById('demo-app'));
}
