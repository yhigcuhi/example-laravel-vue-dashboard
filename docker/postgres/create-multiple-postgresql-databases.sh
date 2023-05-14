#!/bin/bash

set -e
set -u

# 指定スキーマ作成 (POSTGRES_USERでユーザー指定している)
# @param {string} $1 作成スキーマ名
function create_schema() {
	local schema=$1
	echo "  Creating schema '$schema' on '$POSTGRES_DB'"
	psql -v ON_ERROR_STOP=1 --username "$POSTGRES_USER" $POSTGRES_DB <<-EOSQL
		CREATE SCHEMA $schema;
EOSQL
}

if [ -n "$POSTGRES_USER" -a -n "$POSTGRES_MULTIPLE_SCHEMAS" ]; then
	echo "Multiple schemas creation requested: [$POSTGRES_MULTIPLE_SCHEMAS] for $POSTGRES_USER"
	for schema in $(echo $POSTGRES_MULTIPLE_SCHEMAS | tr ',' ' '); do
		# 指定スキーマ 追加
		create_schema $schema
	done
	echo "Multiple schemas created"
fi