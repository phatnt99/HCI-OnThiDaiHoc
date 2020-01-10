import React, { Component } from 'react';
import { View, Text, StyleSheet, FlatList, TouchableOpacity, Image } from 'react-native';
import Icon from 'react-native-vector-icons/Ionicons';

import { Button, Header, Left, Right, Body, Title, Container, Content, Thumbnail } from 'native-base';
import { DeThi } from '../dataset/dataMonHoc';

const DATA = [
    {
        id: '1',
        title: 'Đề thi thử THPT QG 2020 môn Toán lần 1 trường chuyên Lê Quý Đôn – Điện Biên',
        analys: 20,
        star: true,
        time: '45 phút',
        thoigian: "00:10",
        date: '20/10/2019',
        mon: 'Toán',
        soCauHoi: '25 câu',
        ketQua: '10/25',
        cauHoi: [
            {
                id: '1',
                noidung: 'Nội dung câu hỏi này sẽ được đến với số 2',
                traloi: {
                    A: 'Hai Bà Trưng (40)',
                    B: 'Hai Bà Trưng (40)',
                    C: 'Hai Bà Trưng (40)',
                    D: 'Hai Bà Trưng (40)'
                },
                dapan: 'A',
                giaithich: 'Vì đây là câu trả lời đúng'
            },
            {
                id: '2',
                noidung: 'Hãy kể các cuộc khởi nghĩa tiêu biểu của nước ta chống xâm lược phương Bắc?',
                traloi: {
                    A: 'Hai Bà Trưng (40)',
                    B: 'Hai Bà Trưng (40)',
                    C: 'Hai Bà Trưng (40)',
                    D: 'Hai Bà Trưng (40)'
                },
                dapan: 'C',
                giaithich: 'Vì đây là câu trả lời đúng'
            },
            {
                id: '3',
                noidung: 'Hãy kể các cuộc khởi nghĩa tiêu biểu của nước ta chống xâm lược phương Bắc?',
                traloi: {
                    A: 'Hai Bà Trưng (40)',
                    B: 'Hai Bà Trưng (40)',
                    C: 'Hai Bà Trưng (40)',
                    D: 'Hai Bà Trưng (40)'
                },
                dapan: 'D',
                giaithich: 'Vì đây là câu trả lời đúng'
            },
            {
                id: '4',
                noidung: 'Hãy kể các cuộc khởi nghĩa tiêu biểu của nước ta chống xâm lược phương Bắc?',
                traloi: {
                    A: 'Hai Bà Trưng (40)',
                    B: 'Hai Bà Trưng (40)',
                    C: 'Hai Bà Trưng (40)',
                    D: 'Hai Bà Trưng (40)'
                },
                dapan: 'A'
            },
            {
                id: '5',
                noidung: 'Hãy kể các cuộc khởi nghĩa tiêu biểu của nước ta chống xâm lược phương Bắc?',
                traloi: {
                    A: 'Hai Bà Trưng (40)',
                    B: 'Hai Bà Trưng (40)',
                    C: 'Hai Bà Trưng (40)',
                    D: 'Hai Bà Trưng (40)'
                },
                dapan: 'C'
            },
            {
                id: '6',
                noidung: 'Hãy kể các cuộc khởi nghĩa tiêu biểu của nước ta chống xâm lược phương Bắc?',
                traloi: {
                    A: 'Hai Bà Trưng (40)',
                    B: 'Hai Bà Trưng (40)',
                    C: 'Hai Bà Trưng (40)',
                    D: 'Hai Bà Trưng (40)'
                },
                dapan: 'D'
            },
            {
                id: '7',
                noidung: 'Hãy kể các cuộc khởi nghĩa tiêu biểu của nước ta chống xâm lược phương Bắc?',
                traloi: {
                    A: 'Hai Bà Trưng (40)',
                    B: 'Hai Bà Trưng (40)',
                    C: 'Hai Bà Trưng (40)',
                    D: 'Hai Bà Trưng (40)'
                },
                dapan: 'A'
            },
            {
                id: '8',
                noidung: 'Hãy kể các cuộc khởi nghĩa tiêu biểu của nước ta chống xâm lược phương Bắc?',
                traloi: {
                    A: 'Hai Bà Trưng (40)',
                    B: 'Hai Bà Trưng (40)',
                    C: 'Hai Bà Trưng (40)',
                    D: 'Hai Bà Trưng (40)'
                },
                dapan: 'C'
            },
            {
                id: '9',
                noidung: 'Hãy kể các cuộc khởi nghĩa tiêu biểu của nước ta chống xâm lược phương Bắc?',
                traloi: {
                    A: 'Hai Bà Trưng (40)',
                    B: 'Hai Bà Trưng (40)',
                    C: 'Hai Bà Trưng (40)',
                    D: 'Hai Bà Trưng (40)'
                },
                dapan: 'D'
            }
        ]
    },
    {
        id: '2',
        title: 'Đề KSCL giữa kì 1 Toán 12 năm 2019 – 2020 trường chuyên ĐH Vinh – Nghệ An',
        analys: 20,
        star: false,
        time: '45 phút',
        thoigian: 45,
        date: '20/10/2019',
        mon: 'Toán',
        soCauHoi: '25 câu',
        ketQua: '10/25',
        cauHoi: [

        ]
    },
    {
        id: '3',
        title: 'Đề thi thử THPT Quốc gia 2020 môn Toán lần 1 trường Lục Nam – Bắc Giang',
        analys: 20,
        star: false,
        time: '45 phút',
        thoigian: 45,
        date: '20/10/2019',
        mon: 'Toán',
        soCauHoi: '25 câu',
        ketQua: '10/25',
        cauHoi: [

        ]
    },
]

function Item({ data, index, navigate }) {
    return (
        <View style={styles.card}>
            <TouchableOpacity style={styles.card_mini}
                onPress={() => {
                    console.log('Vô chưa');
                    navigate('DeThiDaLam', data);
                }}>
                <View>
                    <Text style={{ lineHeight: 20 }}>{data.title}</Text>
                </View>
                <View style={{ flexDirection: 'row-reverse', justifyContent: 'space-between', alignItems: 'center', marginTop: 5 }}>
                    <View style={{ flexDirection: 'row', alignItems: 'center' }}>
                        <Icon name="md-flame" size={21} color="#00817C" />
                        <Text style={{ marginLeft: 5, color: '#C4C4C4' }}>{data.ketQua}</Text>
                    </View>
                </View>
            </TouchableOpacity>
        </View>
    )
};
function Item1({ data, f5, navigate }) {
    return (
        <>
            {data.star && <View style={styles.card}>
                <TouchableOpacity style={styles.card_mini}
                    onPress={() => {
                        console.log('Vô chưa');
                        navigate('ChiTietDe', { 'data': data, 'f5': f5 });
                    }}>
                    <View>
                        <Text style={{ lineHeight: 20 }}>{data.title}</Text>
                    </View>
                    <View style={{ flexDirection: 'row', justifyContent: 'space-between', alignItems: 'center', marginTop: 5 }}>
                        <View style={{ flexDirection: 'row', alignItems: 'center' }}>
                            <Icon name="md-person" size={21} color="#00817C" />
                            <Text style={{ marginLeft: 5, color: '#C4C4C4' }}>{data.analys}</Text>
                        </View>
                        <View>
                        {data.star && <Icon name={data.star ? "md-star" : null} size={25} color="#00817C" />}
                        </View>
                    </View>
                </TouchableOpacity>
            </View>}
        </>
    )
};

export default class LichSuLamBai extends Component {
    constructor(props) {
        super(props);
        this.state = {
            menu: 1,
            refresh: false
        };
    }

    refreshs = () => {
        this.setState({ refresh: !this.state.refresh })
    }

    renderMenu = () => {
        switch (this.state.menu) {
            case 1:
                return (
                    <FlatList
                        scrollEnabled={true}
                        data={DeThi}
                        renderItem={({ item, index }) => <Item data={item} index={index} navigate={this.props.navigation.navigate} />}
                        keyExtractor={item => item.id}
                    />
                );
            case 2:
                return (
                    <FlatList
                        scrollEnabled={true}
                        data={DeThi}
                        renderItem={({ item, index }) => <Item1 data={item} f5={this.refreshs} navigate={this.props.navigation.navigate} />}
                        keyExtractor={item => item.id}
                        extraData={this.state.refresh}
                    />
                );
        }
    }

    render() {
        return (
            <Container>
                <View style={styles.header}>
                    <View style={{ flexDirection: 'row' }}>
                        <View style={{ flex: 8 }}>
                            <TouchableOpacity
                                onPress={() => {
                                    this.props.navigation.goBack(null);
                                }}>
                                <Icon name="md-arrow-back" size={25} />
                            </TouchableOpacity>
                            <Text style={styles.titleHeader}>Lịch sử</Text>
                        </View>
                        <View>
                        <Image source={require('../public/images/his.png')} style={{
                                width: 100,
                                height: 100
                            }} />
                        </View>
                    </View>
                </View>
                <View style={styles.container}>
                    <View style={styles.menu}>
                        <TouchableOpacity
                            onPress={() => { this.setState({ menu: 1 }) }} style={styles.titleMenu}><Text style={[styles.sub, this.state.menu == 1 ? styles.active : '']}>Đã làm</Text></TouchableOpacity>
                        <TouchableOpacity
                            onPress={() => { this.setState({ menu: 2 }) }} style={styles.titleMenu}><Text style={[styles.sub, this.state.menu == 2 ? styles.active : '']}>Đã lưu</Text></TouchableOpacity>
                    </View>
                    {this.renderMenu()}
                </View>
            </Container>
        );
    }
}

const styles = StyleSheet.create({
    container: {
        flex: 1
    },
    header: {
        paddingLeft: 15,
        paddingRight: 15,
        marginTop: 10
        //paddingTop: 10,
        //paddingBottom: 10

    },
    titleHeader: {
        //marginTop: 17,
        marginTop: 10,
        fontWeight: 'bold',
        fontSize: 23
    },
    menu: {
        //marginTop: 20,
        marginBottom: 10,
        flexDirection: 'row',
        justifyContent: 'space-around'
    },
    titleMenu: {
        //flex: 1,
        //alignItems: 'center',
    },
    sub: {
        fontSize: 20,
        color: "#C4C4C4"
    },
    active: {
        fontWeight: 'bold',
        color: '#00817C'
    },
    inactive: {
        color: '#C4C4C4'
    },
    card: {
        marginTop: 10,
        marginBottom: 10,
        marginLeft: 15,
        marginRight: 15,
        //padding: 3,
    },
    card_mini: {
        elevation: 3,
        backgroundColor: '#FFFFFF',
        //flexDirection: 'row',
        //alignItems: 'center',
        padding: 10
    },
    card_number: {
        color: "#C4C4C4",
        fontSize: 41
    },
    card_title: {
        color: '#00817C',
        fontSize: 16, fontWeight: '700'
    },
    card_expand: {
        color: '#00817C'
    },
    card_subtitle: {
        color: "#C4C4C4"
    },
    lesson_wrap: {
        flexDirection: 'row',
        alignItems: 'center',
        marginTop: 20,
        marginLeft: 20,
        marginRight: 20
    }
})